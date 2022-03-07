#Write a Python class which has two methods get_String and print_String. get_String
#accept a string from the user and print_String print the string in upper case. Further
#modify the program to reverse a string word by word and print it in lower case.

class string:
    def get_String(self):
        self.s=input("Enter the string:")
    def print_String(self):
        print("String in upper case:",self.s.upper())
        ls=self.s.lower()
        word=ls.split(' ')
        rev=' '.join(reversed(word))
        print("Reverse string:",rev)
        
s1=string()
s1.get_String()
s1.print_String()
