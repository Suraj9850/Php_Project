#Write python script using package to calculate area and volume of cube and sphere

class cube:
    def area(s,e):
        print("Area of cube is:",6*e*e)
    def vol(s,e):
        print("Volume of cube is:",e*e*e)

class sphare:
    def area(self,r):
        print("Area of sphare is:",4*3.14*r*r)
    def vol(self,r):
        print("Volume of sphare is:",4/3*3.14*r*r*r)

c=cube()
s=sphare()
c.area(5)
c.vol(5)
s.area(4)
s.vol(4)

