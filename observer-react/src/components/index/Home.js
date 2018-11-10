import React, {Component} from 'react';

export default class Home extends Component {

    constructor() {
        super();
        this.state = {
            posts: null
        }
    }

    componentDidMount() {
        const URL = "https://test.loc/patterns/Observer/api/v1/posts";
        fetch(URL).then(res => res.json()).then(json => {
            this.setState({posts: json});
        });
    }

    render() {
        if (!this.state.posts) return (<div>Loading</div>);
        return (
            <div className="row">
                <div className="col-6 mb-2">
                    <h2>Посты</h2>
                    {this.state.posts.map((post, index) => (
                        <div key={index} className="card flex-md-row mb-4 shadow-sm h-md-250">
                            <div className="card-body d-flex flex-column align-items-start">
                                <strong className="d-inline-block mb-2 text-primary">{post.type}</strong>
                                <h4 className="mb-0">
                                    <a className="text-dark" href="#">Пост #{post.id}</a>
                                </h4>
                                <div className="mb-1 text-muted">{post.timestamp}</div>
                                <p className="card-text mb-auto">{post.text}</p>
                                <img width="200" src={post.photo} alt="" />
                                    <a href="/patterns/Observer/one/{post.id}">Читать</a>
                            </div>
                            <img className="card-img-right flex-auto d-none d-lg-block"
                                 data-src="holder.js/200x250?theme=thumb" alt="" />
                        </div>
                    ))}

                    <button type="button" className="btn btn-lg btn-block btn-outline-primary">Посмотреть все посты
                    </button>
                </div>
                <div className="col-6">
                    <h2>Статистика</h2>
                    <canvas className="col-12" id="myChart" width="900" height="380"></canvas>
                </div>
            </div>
        );
    }
}

