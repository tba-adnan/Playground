import { render } from "@testing-library/react";
import React from "react";


class index extends React.Component {
    constructor(){
        super(); 
        this.state = {error_code:null};
    }


okayFunction = () => {
    this.setState({error_code:200});
}

notokayFunction = () => {
    this.setState({error_code:404})
}


render(){
    return (
        <div>
          <h1>Error {this.state.error_code}</h1> 
          <button type="button" onClick={this.okayFunction}>Error 200</button>
          <br></br>
          <button type="button" onClick={this.notokayFunction}>Error 404</button>
        </div>
    );
}

}

export default index; 


