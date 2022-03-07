/*Write a java program to validate PAN number and Mobile Number. If it is invalid
then throw user defined Exception 'Invalid Data', otherwise display it.*/

import java.util.*;
import java.io.*;
class checkData extends Exception
{
	checkData(String msg)
	{
		super(msg);
	}
}
class slip9_java2
{
	public static void main(String a[])
	{
		Scanner s=new Scanner(System.in);
		System.out.println("Enter the mobile no:");
		int no=s.nextInt();
		System.out.println("Enter pan no:");
		String pan=s.next();
		try
		{
			int cnt=0;
			for(int i=0;i<pan.length();i++)
			{
				if(Character.isDigit(pan.charAt(i)))
				{
					cnt++;
				}
			}
			
			if(String.valueOf(no).length()!=10 || pan.length()!=10 || cnt!=4)	
			{
				throw new checkData("Invalid data...");
			}
			else
			{
				System.out.println("Valid Data");
			}
		}
		catch(checkData e)
		{
			System.out.println(e.getMessage());
		}
	}
}