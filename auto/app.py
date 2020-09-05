from flask import Flask, render_template, request
import smtplib
from email.mime.multipart import MIMEMultipart
from email.mime.text import MIMEText

app = Flask(__name__)
@app.route("/forgot", methods=["POST","GET"])
def forgot():
    if request.method == "GET":
        return render_template("forgot.html")
    if request.method == "POST":
        mail_content = """Hello,
        click below link to reset your password

        https://kota29.github.io/home_automation/reset%20password.html

        Thank You
        """
        #The mail addresses and password
        rm = request.form.get("ei")
        sender_address = 'friends63097@gmail.com'
        sender_pass = 'Ironman$519'
        receiver_address = rm
        #Setup the MIME
        message = MIMEMultipart()
        message['From'] = sender_address
        message['To'] = receiver_address
        message['Subject'] = 'Reset Link For Home Automation.'   #The subject line
        #The body and the attachments for the mail
        message.attach(MIMEText(mail_content, 'plain'))
        #Create SMTP session for sending the mail
        session = smtplib.SMTP('smtp.gmail.com', 587) #use gmail with port
        session.starttls() #enable security
        session.login(sender_address, sender_pass) #login with mail_id and password
        text = message.as_string()
        session.sendmail(sender_address, receiver_address, text)
        session.quit()
        return render_template("index.html",un="mail sent")
        
if __name__ == "__main__":
    app.run()
