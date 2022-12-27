import React from 'react';
import { BrowserRouter, Routes, Route } from 'react-router-dom';
import ReactDOM from 'react-dom/client';
import reportWebVitals from './reportWebVitals';
import './index.css';
import App from './App';
import Hlw from './components/Hlw';

import Layout from './pages/layout';
import Pageone from './pages/page1';
import Pagetwo from './pages/page2';




export default function Routing() {
    return (
      <BrowserRouter>
        <Routes>
          <Route path="/" element={<Layout />}></Route>
          <Route path="/demo" element={<Pageone/>}></Route>
          <Route path="/page" element={<Pagetwo/>}></Route>
        </Routes>
      </BrowserRouter>
    );
  }


const root = ReactDOM.createRoot(document.getElementById('root'));
root.render(<Routing />);


// const root = ReactDOM.createRoot(document.getElementById('root'));
// root.render(<App />);

// const root_one = ReactDOM.createRoot(document.getElementById('root_one'));
// root_one.render(<Hlw/>);

// const page_one = ReactDOM.createRoot(document.getElementById('routing_one'));
// page_one.render(<Pageone/>);




// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
reportWebVitals();
