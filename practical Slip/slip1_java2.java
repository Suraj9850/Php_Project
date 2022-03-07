//Write a ‘java’ program to copy only non-numeric data from one file to another file.

import java.io.*;
class slip1_java2
{
	public static void main(String a[])throws IOException
	{
		FileReader f=new FileReader("Test.txt");
		FileWriter f1=new FileWriter("Test2.txt");
		System.out.println("Test.tx file data is");
		int i;
		while((i=f.read())!=-1)
		{
			char ch=(char)i;
			if(Character.isDigit(ch))
			{
						
			}
			else
			{
				f1.write(ch);
				System.out.print(ch);	
			}
		}
		f.close();
		f1.close();
	}
}