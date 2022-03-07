//Write a java program to accept list of file names through command line. Delete the
//files having extension .txt. Display name, location and size of remaining files.

import java.io.*;
class slip5_java2
{
	public static void main(String a[])throws IOException
	{
		for(int i=0;i<a.length;i++)
		{
			
			File f=new File(a[i]);
			if(f.isFile())
			{
				String s=f.getName();
				if(s.endsWith(".txt"))
				{
					f.delete();
					System.out.println(s+"File deleted");
				}	
				else
				{
					System.out.println("File name:"+s);
					System.out.println("File size:"+f.length());
					System.out.println("File Location:"+f.getPath());
				}
			}
			else
			{
				System.out.println("File can't find...");
			}
		}
	}
}