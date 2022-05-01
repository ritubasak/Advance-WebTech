// import Header from './Header'
import React, {useState, useEffect} from 'react'
import {Table} from 'react-bootstrap'

function StudentList()
{
      const [data,setData] = useState([]);
       useEffect( ()=>{
         async function fetchMyAPI(){
           let result= await fetch('http://127.0.0.1:8000/api/list');
    //           method:'GET'});
         
           result = await result.json();
          setData(result)
          }
    //       //console.warn("data",data);
    fetchMyAPI()
    
       },[])
      console.warn("data",data);
    return(
        <div>
            {/* <Header/> */}
            <h1 >Student list</h1>
            <Table striped bordered hover>
            <thead>
            <tr>
      
      <th>ID</th>
      <th>NAME</th>
      <th> EMAIL</th>
      <th> MOBILE</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>001</td>
      <td>Ritu</td>
      <td>ritu@gmail.com</td>
      <td>01764493894</td>
      
    </tr>
    <tr>
      <td>002</td>
      <td>Om</td>
      <td>om@gmail.com</td>
      <td>01364493897</td>
     
    </tr>

    <tr>
      <td>003</td>
      <td>Priya</td>
      <td>P@gmail.com</td>
      <td>01954493893</td>   
    </tr>

  
        </tbody>
</Table>
            
        </div>
    )
}
export default StudentList;














