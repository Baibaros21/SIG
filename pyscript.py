import sys
import json

response = sys.argv[1]
if(response=='hi'):
    answer = 'hello'
elif(response=='i am sad'):
    answer = 'so?'

else: answer = 'eat shit'

print (json.dumps(answer))