#) Write a Python script using class, which has two methods get_String and
#print_String. get_String accept a string from the user and print_String print the string in
#upper case.

class demo:
    def get_String(self):
        self.s=input("Enter the string:")
    def print_String(self):
        print("String in upper case:",self.s.upper())

d=demo()
d.get_String()
d.print_String()
