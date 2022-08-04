import React from "react";
import '../App.css';
import { Link } from "react-router-dom";
const Head = () => {
    return ( 
        <center>
        <div className = "App-header" >
            
        
        <Link to = "/" > < b > Home </b></Link ><br></br>
        <Link to = "/userList" > < b > Users </b></Link >
        <Link to = "/contact" > < b > Contact </b></Link >
        
        </div>
        </center>
        
    )
}

export default Head;