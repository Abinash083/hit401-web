import {useState} from "react";
import "./login.css"


const Login_page = () => {
    const [email,setEmail] = useState('');
    const [user_type,setType] = useState('student');
    const [password,setPassword] = useState('');
    const handellogin = (e) =>{
        e.preventDefault();
        console.log(email)
        /**(pull data from php server to verify data)
         ***/
    }

    return(
        <div>
            
            <form onSubmit={handellogin}>
            
            <label  >Email address : </label>
            <br></br>
            <input 
            type="email"
            value={email}
            onChange={(e) => setEmail(e.target.value)}/>
            <br></br>
            <label >Choose a login type:</label>
            <br></br>
            <select value={user_type} onChange={(e) => setType(e.target.value)} >
                <option value="admin">Admin</option>
                <option value="student">Student</option>
                <option value="lecturer">Lecturer</option>
            </select>
            <br></br>
            {user_type !== "student" && <label >Password:</label>}
            <br></br>
            {user_type !== "student" && <label >Password:</label> &&<input type="password"
            value={password}
            onChange={(e) => setPassword(e.target.value)}/>}
            
            <br></br>
            
            <br></br>
            {user_type === "student" && <button  type = "submit">Send Password</button>}
            {user_type !== "student" && <button  >Login</button>}
        </form>
        </div>
    )

};
export default Login_page;
