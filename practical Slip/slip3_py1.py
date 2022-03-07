#Write a Python program to check if a given key already exists in a dictionary. If
#key exists replace with another key/value pair

dict={}
n=int(input("Enter the no of keys:"))
for i in range(0,n):
    key=input("Enter the key:")
    if key in dict:
        print("Key already present...")
        key=input("Enter the key:")
    value=input("Enter the value:")
    dict[key]=value
print(dict)
