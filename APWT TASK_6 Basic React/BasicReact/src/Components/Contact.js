import React, { Component } from "react";

// const Contact = () => {
//     return (<h1>Contacts</h1>);
// }
    
// export default Contact;



class ShowContact extends Component{
    constructor(){
        super()
        this.state = {
            message: 'Click here to contact us!'
        }
    }
    changeMessage(){
        this.setState({
            message: 'Gmail: ritubsk@gmail.com'
        })
    }
    render(){
        return(
            <div>
                <h1>{this.state.message}</h1>
                <button  onClick={()=>this.changeMessage()}>Contact</button>
            
            </div>

        )
    }

}

export default ShowContact;