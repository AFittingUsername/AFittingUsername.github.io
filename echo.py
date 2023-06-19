#!/usr/bin/env python
import cgi

# Create instance of FieldStorage
form = cgi.FieldStorage()

# Set content type
print("Content-type: text/plain\n")

# Echo back the parameters
for key in form.keys():
    value = form[key].value
    print(f"{key}: {value}")
