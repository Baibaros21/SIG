import sys
import json

response = sys.argv[1]
if(response=='hi'):
    answer = 'hello'
elif(response=='i am sad'):
    answer = 'it is fine'
elif(response=='happy'):
    answer = 'good'

else: answer = 'sorry didnt get that'

print (json.dumps(answer))