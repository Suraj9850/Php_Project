//Write a java program to accept details of ‘n’ cricket player (pid, pname, totalRuns,
//InningsPlayed, NotOuttimes). Calculate the average of all the players. Display the
//details of player having maximum average. (Use Array of Object)

import java.io.*;
class player
{
	int pid,totalRun,inningPlay,notOut;
	String pname;
	double avg;
	player(int pid,String pname,int totalRun,int inningPlay,int notOut)
	{
		this.pid=pid;
		this.pname=pname;
		this.totalRun=totalRun;
		this.inningPlay=inningPlay;
		this.notOut=notOut;
	}
	double calAvg()
	{
		int ing=inningPlay-notOut;
		avg=totalRun/ing;
		return avg;
	}
	void display()
	{
		System.out.println("Player Id:"+pid);
		System.out.println("Player Name:"+pname);
		System.out.println("Player Total run:"+totalRun);
		System.out.println("Player total Inning:"+inningPlay);
		System.out.println("Player Not out:"+notOut);
		System.out.println("Player Not out:"+avg);
	}
}
class slip7_java2
{
	public static void main(String a[])throws IOException
	{
		BufferedReader br=new BufferedReader(new InputStreamReader(System.in));

		System.out.println("Enter the player no:");
		int n=Integer.parseInt(br.readLine());
		player p[]=new player[n];
		for(int i=0;i<n;i++)
		{
			System.out.println("Enter player "+(i+1)+"Data:");
			System.out.println("Enter player id:");
			int pid=Integer.parseInt(br.readLine());
		
			System.out.println("Enter player name:");
			String name=br.readLine();

			System.out.println("Enter Total runs:");
			int run=Integer.parseInt(br.readLine());

			System.out.println("Enter Total inning:");
			int inning=Integer.parseInt(br.readLine());

			System.out.println("Enter Not out inning:");
			int notOut=Integer.parseInt(br.readLine());
			
			p[i]=new player(pid,name,run,inning,notOut);
		}
		double max=0;
		int t=0;
		for(int j=0;j<n;j++)
		{
			double m=p[j].calAvg();
			if(m>max)
			{
				t=j;
				max=m;
			}
		}
		System.out.println("Max Avarage player data:");
		p[t].display();
	}
}
