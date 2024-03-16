#!/usr/local/bin/python3 
from flask import Flask, request 
app = Flask(__name__)
@app.route('/')
def index():
    # Retrieve user input from query parameters
    user_input = request.args.get('input')

    # Output user input without proper sanitization
    return "User input: " + user_input

if __name__ == '__main__':
    app.run()
# ======================================================
    from flask import Flask, request
from markupsafe import escape

app = Flask(__name__)

@app.route('/')
def index():
    # Retrieve user input from query parameters
    user_input = request.args.get('input')

    # Sanitize user input using escape()
    sanitized_input = escape(user_input)

    # Output the sanitized input
    return "Sanitized user input: " + sanitized_input

if __name__ == '__main__':
    app.run()

