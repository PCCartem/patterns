import React, { Component } from 'react';



export default class Header extends Component {
  render() {
    return (
        <div>
            <header className="blog-header py-3">
                <div className="row flex-nowrap justify-content-between align-items-center">
                    <div className="col-8 text-left">
                        <a className="blog-header-logo text-dark" href="#">Super Observer Service</a>
                    </div>
                    <div className="col-4 d-flex justify-content-end align-items-center">
                        <button className="btn btn-sm btn-outline-secondary" href="#">Выйти</button>
                    </div>
                </div>
            </header>

            <div className="nav-scroller py-1 mb-2">
                <nav className="nav d-flex justify-content-between">
                    <a className="p-2 text-muted" href="index.html">Главная</a>
                    <a className="p-2 text-muted" href="add.html">Добавить пост</a>
                    <a className="p-2 text-muted" href="all.html">Все посты</a>
                </nav>
            </div>
        </div>

    );
  }
}


