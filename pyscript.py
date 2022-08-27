import sys
import json

response = sys.argv[1]
if(response=='hi'):
    answer = 'hello'
elif(response=='i am sad'):
    answer = 'so?'
elif(response=='happy'):
    answer = 'no'

else: answer = 'eat shit'

print (json.dumps(answer))