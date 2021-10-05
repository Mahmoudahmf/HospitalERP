import React from 'react';
import ReactDOM from "react-dom";
import moment from 'moment';


class Digital extends React.Component {

    constructor() {
        super();
        this.state = {
            time: moment().format('LT')
        }; // initialise the state
    }

    componentDidMount() { // create the interval once component is mounted
        this.update = setInterval(() => {
            this.setState({time: moment().format('LT')});
        }, 1000); // every 1 seconds
    }

    componentWillUnmount() { // delete the interval just before component is removed
        clearInterval(this.update);
    }

    render() {
        const {time} = this.state; // retrieve the time from state

        return (
            <div>

                <h1>
                    {time}
                </h1>

            </div>)
    }
}



export default Digital;

if(document.getElementById('dclock')) {
    ReactDOM.render(<Digital/>, document.getElementById('dclock'));
}
