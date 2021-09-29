import React , {useState} from 'react';
import ReactDOM from "react-dom";
import moment from 'moment';


function Digital () {
    let time ;
    const [setCtime] = useState(time);
    const updateTime =() =>{
        time =  moment.format('LT')
        setCtime(time);
    }
    setInterval(updateTime,1000)
    return(
        <>
            {time}
        </>
    )
}



export default Digital;

if(document.getElementById('dclock')) {
    ReactDOM.render(<Digital/>, document.getElementById('dclock'));
}
