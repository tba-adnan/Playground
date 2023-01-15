import React from "react";


class Pageone extends React.Component { 
    constructor(){
        super(); 
        this.state = {name:"1"}
    }

render(){
    return(
        <div>
            <h1>This is page {this.state.name}  </h1>
        </div>
    );
}
    
}

export default Pageone; 