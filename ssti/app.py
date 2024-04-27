from flask import Flask, render_template_string, request
from jinja2 import Template

app = Flask(__name__)

@app.route('/')
def index():
    name = request.args.get('name', 'world')  # Get the 'name' query parameter, defaulting to 'world'
    template = Template('<h2>Hello {{ name }}!</h2>')
    return render_template_string(template.render(name=name))

if __name__ == '__main__':
    app.run(debug=True, host='0.0.0.0')
