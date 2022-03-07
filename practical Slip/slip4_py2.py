#Define a class Employee having members id, name, department, salary. Create a
#subclass called manager with member bonus. Define methods accept and display in
#both the classes. Create n objects of the manager class and display the details of the
#manager having the maximum total salary (salary+bonus).

class emp:
    
    def getEmp(self):
        self.id=int(input("Enter the id:"))
        self.name=input("Enter the name:")
        self.dept=input("Enter the department:")
        self.sal=int(input("Enter the salary:"))
    def showEmp(self):
        print("Id:",self.id)
        print("Name:",self.name)
        print("Depratment:",self.dept)
        print("Salary:",self.sal)

class manger(emp):
    tsal=0
    def getMan(self):
        super().getEmp()
        self.bonus=int(input("Enter the bonus:"))
        self.tsal=self.sal+self.bonus
    def showMan(self):
        super().showEmp()
        print("Total Salary:",self.tsal)

m1=manger()
m1.getMan()

m2=manger()
m2.getMan()

print("Max Salary..")
if m1.tsal>m2.tsal:
    m1.showMan()
else:
    m2.showMan()
