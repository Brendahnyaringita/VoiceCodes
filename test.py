import os

from flask import Flask, request
from flask_restful import Resource, Api

import africastalking

app = Flask(__name__)
api = Api(app)

username = os.getenv('user_name', 'username')
api_key  = os.getenv('api_key', 'api')


africastalking.initialize(username, api_key)
voice = africastalking.Voice

@app.route("/voice", methods = ['GET', 'POST'])
def voice():
	session_id   = request.values.get("sessionId", None)
	isActive     = request.values.get("isActive", None)
	phone_number = request.values.get("callerNumber", None)

	response  = '<Response> <GetDigits timeout="30" finishOnKey="#">'
	response += '<Say voice="woman" playBeep="false">Please enter your account number followed by the hash sign</Say> </GetDigits> </Response>'

	dtmfDigits = request.values.get("dtmfDigits", None)

	if dtmfDigits =='1234':
		response  = '<Response> <GetDigits timeout="30" finishOnKey="#">'
		response += '<Say voice="woman" playBeep="false"> To hear a cool fun fact press 1, To speak to an agent press 2, to quit this menu press 0 followed by the hash sign.</Say> </GetDigits> </Response>'

	elif dtmfDigits == '1':
		response  = '<Response>'	
		response += '<Say voice="woman" playBeep="false"> Did you know the worlds oldest toy is a stick </Say>'
		response += '</Response>'

	elif dtmfDigits == '2':
		response  = '<Response>'
		response += '<Dial record="true" sequential="true" phoneNumbers="+2547xxxxxxxx"> </Dial>'
		response += '</Response>'	

	elif dtmfDigits == '0':
		response  = '<Response>'
		response += '<Say voice="woman" playBeep="false"> Thank you for calling, goodbye </Say>'
		response += '</Response>'

	return response
	
if __name__== '__main__':
	app.run(debug=True)			

