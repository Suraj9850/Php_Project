# Write a Python script using class to reverse a string word by word

class string:
    def rev(self,s):
        word=s.split(' ')
        reve=' '.join(reversed(word))
        print("Revesed String:",reve)
a=string()
a.rev("Hello How Are you")
