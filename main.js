const { default: Axios } = require("axios");
const { json } = require("body-parser");

class contactForm {
    constructor (_props) {
        super (_props);
        this.state = {
            name:'',
            number:'',
            email:'',
            subject:'',
            message:'',
            disabled: false,
            emailSent: null,
        };
        this.setState = undefined;
    }
    handleChange = (event) => {
        console.log(event);
        const target= event.target;
        const value = target.type === 'checkbox' ? target.checked : target.value;
        const name = target.name;
        this.setState({
            [name]: value
        })
    }
    handleSubmit = (event) => {
        event.preventDefault();
        this.setState({
            disabled:true
        });
        Axios.post('/api/email',this.state)
            .then(_res => {
                if(_res.data.success){
                    this.setState({
                    disabled:false,
                    emailSent: true
                });
                }
                else{
                    this.setState({
                        disabled:false,
                        emailSent:false                   
                     });
                }
            })
            .catch(_err=> {
                this.setState({
                    disabled: false,
                    emailSent: false
                });
             })
        }
    }
