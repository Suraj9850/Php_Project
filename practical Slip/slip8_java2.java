/*Write a java program to display the files having extension .txt from a given
directory. */

import java.util.*;
import java.io.*;
class slip8_java2
{
	public static void main(String a[])
	{
		Scanner sc=new Scanner(System.in);
		System.out.println("Enter Directory name:");
		String name=sc.next();
		File f=new File(name);
		if(f.isDirectory())
		{
			String file[]=f.list();
			for(int i=0;i<file.length;i++)
			{
				if(file[i].endsWith(".txt"))
				{
					System.out.println(file[i]+"  ");
				}		
			}		
		}
		else
		{
			System.out.println("Directory not found");
		}
	}
}