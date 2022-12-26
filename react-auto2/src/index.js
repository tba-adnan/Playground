import React from 'react';
import ReactDOM from 'react-dom/client';
import './index.css';
import App from './App';
import reportWebVitals from './reportWebVitals';
import Demo from './components/demo';
import Demotwo from './components/demotwo';
import Navbar from './components/demothree';

const root = ReactDOM.createRoot(document.getElementById('root'));
const root_one = ReactDOM.createRoot(document.getElementById('root_one'));
const root_two = ReactDOM.createRoot(document.getElementById('root_two'));
const root_three = ReactDOM.createRoot(document.getElementById('root_three'));


root_one.render(<Demo/>);
root.render(<App />);
root_two.render(<Demotwo/>); 
root_three.render(<Navbar/>)



// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
reportWebVitals();
