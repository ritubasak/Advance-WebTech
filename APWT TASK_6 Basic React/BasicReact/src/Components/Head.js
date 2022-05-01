import React from "react"
import { Navbar, Nav, NavDropdown } from 'react-bootstrap'
import { Link } from 'react-router-dom'
import { useNavigate } from 'react-router-dom';
function Head() {
    let user = JSON.parse(localStorage.getItem('user-info'))
    return(
        <div>

<Navbar bg="danger" variant="dark">
        
        <Nav className="me-auto navbar_wrapper">

            <Link to="/"><Navbar.Brand>    Home    </Navbar.Brand></Link>
            <Link to="/allproducts"><Navbar.Brand>    StudentList    </Navbar.Brand></Link>
            <Link to="/contact"><Navbar.Brand>    Contact    </Navbar.Brand></Link>
           
            </Nav>
       
      </Navbar>
        </div>
    )
}
export default Head;