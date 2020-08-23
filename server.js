const express = require('express')
const bodyParser= require('body-parser')
const nodemailer = require('nodemailer')
const app = express()
    app.use(bodyParser.json())
    app.use(bodyParser.urlencoded({ extended: false}))
    app.post('/api/email',(req,_res)=> {
    nodemailer.createTestAccount((_err,_account)=> {
        const htmlEmail =`<h2>Contact Me</h2>
        <div>
            <input First Name: ${req.body.name}>
            <input Last Name: ${req.body.name}>
            <input Phone Number: ${req.body.phone}>
            <input Email Address: ${req.body.email}>
            <input Subject: ${req.body.subject}>
            <textarea ${req.body.message}</textarea>
        </div>
        `

        let transporter = nodemailer.createTransport({
            service: 'inmotionhosting',
            auth: {
                user: '',
                pass: ''
            }
        })  
        let mailOptions = {
            from: req.body.name, 
            to: 'selina@selinaroth.com',
            replyTo: req.body.email,
            subject: 'New Message',
            text: req.body.message,
            html: htmlEmail
        }  
        transporter.sendMail(mailOptions, (_err,info)=>{
            if(_err){
                return console.log(_err)
            }
            console.log('message sent: %s', info.message) 
            console.log('Message URL: %s', nodemailer.getTestMessageUrl(info))
        })
    })
})
const Port = process.env.Port || 3000
app.listen(Port, () => {console.log('server listening on port ${Port}')})