#Write a Python function that accepts a string and calculate the number of upper case
#letters and lower case letters.
#Sample String: 'The quick Brown Fox'
#Expected Output:
#No. of Upper case characters: 3
#No. of Lower case characters: 13

s=input("Enter the string")

low=0
up=0

for i in s:
   
    if i.islower():
        low+=1

    if i.isupper():
        up+=1

print("No. of Upper case characters: ",up)
print("No. of Lower case characters:",low)
   
