import {useState} from "react";
import "./login.css";


const Login_page = () => {
    const [email,setEmail] = useState('');
    const [user_type,setType] = useState('student');
    const [password,setPassword] = useState(Math.floor(Math.random() * (9999 - 1111)) + 1111);
    
    const handellogin = (e) =>{
        e.preventDefault();
        setPassword(Math.floor(Math.random() * (9999 - 1111)) + 1111);
        console.log(password);
        
    }
    

    return(
        <div className="content">
            <label >Choose a login type:</label>
            <br></br>
            <select value={user_type} onChange={(e) => setType(e.target.value)} >
                <option value="admin">Admin</option>
                <option value="student">Student</option>
                <option value="lecturer">Lecturer</option>
            </select>
            <br></br>
            <form>
            
            {user_type === "student" && <label  >Email address : </label>}
            <br></br>
            {user_type === "student" && <input 
            type="email"
            id="email"
            name="email"
            value={email}
            onChange={(e) => setEmail(e.target.value)}/>}
            
            <br></br>
            
            
            <br></br>
            {user_type === "student" && <button  onClick= {handellogin}>Send Password</button>}
            {user_type !== "student" && <a href="http://localhost/login.php"  >Login as {user_type}</a>}
        </form>
        </div>
    )

};
export default Login_page;
