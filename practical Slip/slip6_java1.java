/*Write a java program to accept a number from user, if it zero then throw user
defined Exception 'Number Is Zero', otherwise calculate the sum of first and last digit
of that number. (Use static keyword).*/

import java.util.*;
import java.io.*;

class NumberIsZero extends Exception
{
	NumberIsZero(String msg)
	{
		super(msg);
	}
}
class slip6_java1
{
	public static void main(String a[])
	{
		Scanner s=new Scanner(System.in);
		System.out.println("Enter the no:");
		int no=s.nextInt();
		try
		{
			if(no==0)
			{
				throw new NumberIsZero("Not valid no");
			}
			else
			{	
				int f=0;
				int l=no%10;
				while(no!=0)
				{
					f=no%10;
					no=no/10;

				}
				System.out.println("Addition:"+(f+l));
			}
		}
		catch(NumberIsZero e)
		{
			System.out.println(e.getMessage());
		}
	}
}

