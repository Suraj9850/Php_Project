#Write a Python program to accept n numbers in list and remove duplicates from a
#list.
l=[]
a=int(input("How many no do you enter:"))
for i in range(a):
    n=int(input())
    l.append(n)

t=set(l)
l=list(t)

print(l)
    

