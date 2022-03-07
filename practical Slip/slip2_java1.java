//) Write a java program to display all the vowels from a given string.

import java.util.*;
class slip2_java1
{
	public static void main(String a[])
	{
		Scanner s=new Scanner(System.in);
		System.out.println("Enter the String:");
		String str=s.nextLine();
		for(int i=0;i<str.length();i++)
		{
			char ch=str.charAt(i);
			if(ch=='a' || ch=='e' || ch=='i' || ch=='o' || ch=='u' 				     || ch=='A' ||ch=='E' || ch=='I' || ch=='O' ||ch=='U')
			{
				System.out.print(ch+"  ");
			}
		}
	}
} 