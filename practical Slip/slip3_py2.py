#Write a python script to define a class student having members roll no, name, age,
#gender. Create a subclass called Test with member marks of 3 subjects. Create three
#objects of the Test class and display all the details of the student with total marks.

class student:
    def __init__(self,rno,name,age,gen):
        self.rno=rno
        self.name=name
        self.age=age
        self.gen=gen

class Test(student):
    def __init__(self,rno,name,age,gen,m1,m2,m3):
        super().__init__(rno,name,age,gen)
        self.m1=m1
        self.m2=m2
        self.m3=m3
    def showStud(self):
        print("Roll no:",self.rno)
        print("Name:",self.name)
        print("Age:",self.age)
        print("Gender:",self.gen)
        print("Total Marks:",self.m1+self.m2+self.m3)

s=Test(1,"Abc",13,"Male",75,98,56)
s.showStud()
print()
s1=Test(2,"Pqr",16,"Male",85,65,95)
s1.showStud()

        
        

