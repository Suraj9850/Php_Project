#Write a python script to find the repeated items of a tuple

tup=(1,3,4,5,4,1,6)
se=set(tup)
print(tup)

print("Repeted elements:",end="  ")
for i in se:
    if tup.count(i)!=1:
        print(i,end="  ")
