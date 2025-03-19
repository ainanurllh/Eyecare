import React from 'react';
import './Login.scss';
import '../../App.scss';
import { Link } from 'react-router-dom';

import logo from '/src/LoginAssets/Logo.png';
import { FaUserShield } from 'react-icons/fa';
import { BsFillShieldLockFill } from 'react-icons/bs';
import { AiOutlineSwapRight } from 'react-icons/ai';

const Login = () => {
    return (
        <div className='loginPage flex'>
            <div className="container">
                
                {/* Container dengan background warna */}
                <div className="colorContainer">
                    <h2 className='title'> Create And Sell Extraordinary Product</h2>
                    <p>Adopt the peace of natural!</p>
                </div>
                
                {/* Form login */}
                <div className="formDiv flex">
                    <div className="headerDiv">
                        <img src={logo} alt="Logo Image" />
                        <h3 className='welcomeText'> Welcome Back!</h3>
                    </div>
                    
                    <form action="" className='form grid'>
                        <span className='loginStatus'> </span>
                             <p>Login status will go here</p>

                        <div className="inputDiv">
                            <label htmlFor="username">Username</label>
                            <div className="input flex">
                                <FaUserShield className='icon'/>
                                <input type="text" id='username' placeholder='Enter Username' className='inputField'/>
                            </div>
                        </div>

                        <div className="inputDiv">
                            <label htmlFor="password">Password</label>
                            <div className="input flex">
                                <BsFillShieldLockFill className='icon'/>
                                <input type="password" id='password' placeholder='Enter Password' className='inputField'/>
                            </div>
                        </div>

                        <button type='submit' className='btn flex'>
                            <span>Login</span>
                            <AiOutlineSwapRight className='icon'/>
                        </button>

                        <span className='forgotPassword'>
                            Forgot your password? <a href="">Click Here</a>
                        </span>
                    </form>
                </div>

<div className="footerDiv flex">
    <span className="text">Don't have an Account? </span>
    <Link to="/register">
        <button className= 'btn'> Sign Up </button>
    </Link>
</div>

            </div>
        </div>
    );
};

export default Login;
