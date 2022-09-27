import {userState} from "react";


const Login_page = () => {
    /**const [email,setEmail] = userState('');
    const [user_type,setType] = userState('student');**/
    const handellogin = (e) =>{
        e.preventDefault();
        console.log("login")
        /**(pull data from php server to verify data)**/
    }

    
    return(
    <form onSubmit={handellogin}>
        <input 
        type="email"
        /**value={email}
        onChange={(e) => setEmail(e.target.value)}**//>
        <label class="form-label" >Email address</label>
       
       <br></br>
        {/* <input type="password" id="Password"  />
        <label >Password</label> */}
        <label for="rank">Choose a login type:</label>
            <select /**value={user_type} onChange={(e) => setEmail(e.target.value)}**/ >
                <option value="admin">Admin</option>
                <option value="student">Student</option>
                <option value="lecturer">Lecturer</option>
            </select>
        <br></br>
        <button >Send Password</button>
    </form>)

};
export default Login_page;
