import React  from "react";
import { Outlet, Link } from "react-router-dom";


class Layout extends React.Component {
    constructor() {
        super(); 
    }


render(){
    return(
        <div>
            <nav>
                <ul>
                    <li><Link to="/">Home</Link></li>
                    <li><Link to="/demo">Page 1</Link></li>
                    <li><Link to="/page">Page 2</Link></li>
                </ul>
            </nav>
        </div>
    );

}

}

export default Layout;