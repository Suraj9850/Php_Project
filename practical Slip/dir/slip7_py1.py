#Write Python class to perform addition of two complex numbers using binary +
#operator overloading

class add:
    def __init__(self,a,b):
        self.a=a
        self.b=b
    def show(self):
        print("No is:",self.a,"+",self.b,"i")
    def __add__(self,p):
        return self.a+p.a,self.b+p.b

p=add(2,5)
q=add(5,7)

p.show()
q.show()
print("Addition is:",p+q)
