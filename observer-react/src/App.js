import React, {Component} from 'react'
import {BrowserRouter as Router, Route, Link} from "react-router-dom";
import 'bootstrap/dist/css/bootstrap.min.css';


import Header from './components/Header';


import Post from './components/index/Post';
import Home from './components/index/Home';


export default class App extends Component {
    render() {
        return (
            <Router>
                <div className="container">
                    <Header/>

                    <Route exact path="/" component={Home}/>
                    <Route path="/post" component={Post}/>

                </div>
            </Router>
        );
    }
}
