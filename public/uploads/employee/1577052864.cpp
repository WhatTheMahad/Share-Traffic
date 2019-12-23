#include<errno.h>
#include<dirent.h>
#include<stdlib.h>
#include<iostream>
#include<fstream>
#include<stdio.h>
#include<cstring>
#include<string>
#include<windows.h>
#include <time.h>
using namespace std;
///for reversed engineering
string store_for_checking,store_for_checking2,to_send_to_deleted,get_differ_file_for_reverse,loc_of_differ_file_for_reverse,total_differ_file_for_reverse;
string v2_locationforreverse,v2_nameforreverse,v1_locationforreverse,v1_nameforreverse,to_add_v1nwithl,to_add_theoldwithnew,finalinreverseeng;
int check_stirng(),ccc;
string to_add_all_lines;
char ch,to_catch;
int abu=0,count1=0,jkjkkl=0,njk=0,njkl=0,end_while_loop=0,end_loop_while_dlt=0,df=0,end_dlt_main=0,check_loop_of_dlt=0,last_addition=0,last_hj=0;
string ami;
int added();
int deleted();
int copy_from_v1();
////
///for parssed
int for_line=0,loop1;
void Rel(string ss);
string name_of_loc_for_parse,name_of_file_for_parse,totalnameofparse,destiofparse;
////

string currentDateTime();
int mainloopq;
int deltab();
int cseg();
int fseg(string bseg);
int merge_version();
string fileopening11g,fileopening22g;
fstream g_s1,g_s2,g_s_final,g_sm;
int string_num123g=0;
string bseg;
int iseg=0;
int create_copy_of_mater_file();
//string length_of_string1g;
int modification11g(string bseg);
int capture1g=0;
int length_of_string1g=0;
int g00g;
string geet1,geet2,geet_final;
string geet_sulman1,geet_sulman2,geet_sulman_final;
string sulman1,sulman2,sulman_final;
int s=0;
//int iseg=0,jssg=0;
////////////////////////////for merging
int cse();
string v1_v2_differ;
int length_of_string1=0,capture1;
int fse(string bhe);
int modification11(string bse);
int mainloopqw=0;
string fileopening111,fileopening222;
int g00,string_num123again=0,for_1st_deleted_value;
int string_num123=0;
HANDLE color=GetStdHandle(STD_OUTPUT_HANDLE);
int deltabt();
int ise=0,jss=0;
int first_copy=1;
string nm1,nm2,nm11,nm22;
int not_again=0;
////////////////////////
int parse();
int create_rep();
int create_bra();
int create_file();
int create_files_for_branches();
int change_branch(string change_bra);
int show_branches();
int create_text_file();
int ignoretheusername=0;
int export_file();
int import_file();
string to_store,to_get_name,to_add;
string main_of;
string change_bra="master"; // is k pas rhy ga k hum is time kis branch k andr han 
string string_for_fol;
string string_for_bra;
string file_na;
string delta_file;
string imp1,fi1,imp2,fi2;
string check_with_other_file;
int r=10;
int checking_status=0;
int ori=0;
int ji=0;
//int rep,bra=0;
int mas=0;
int nou=0;
//comparison

//HANDLE color=GetStdHandle(STD_OUTPUT_HANDLE);
int ihe=0,j=0;
int sta=0;
int loc=0;
int strepocre=0;

int admin_removed=1;
int choice2=0;
string last_branch;
int nhj;
int create_admin();
string admin_name;
string admin_password;
string string_for_bra_pass;
string user_name,user_password;
int lineofbackupfile=0;
int main()
{
	cout<<"\n";
	cout<<"\t\t****************************************************\n";
	cout<<"\t\t*                                                  *\n";
	cout<<"\t\t*               U_DIFF_HUB                         *\n";
	cout<<"\t\t*                                                  *\n";
	cout<<"\t\t****************************************************\n";
	SetConsoleTextAttribute(color, 7);
	
	int choice;
	
		//main_of="\0";
		cout<<"\n\n\t\t\t\tADMIN PAGE\n\n\n";
		cout<<"\n\n\t\t\tEnter Admin Name: ";
		
		getline(cin,admin_name);
		cout<<"\n\t\t\tEnter Admin Password: ";
		
		getline(cin,admin_password);
		
		if(admin_name=="admin" && admin_password=="master")
		{
			cout<<"\n\t\tLogged in Successfully.";
		}
		else
		{
			cout<<"wrong";
			main();
		}
	top:	cout<<"\n\n\t\t\t\tADMIN MENU:\n\n\t\t1-Create Repository\n\t\t2-Create User\n\t\t3-Exit\n\n\t\t\tEnter U choice:";
		cin>>choice;
	
	//cout<<"1-Create Repository\n2-Create Branch\n3-Change Branch\n4-Show Current Branch\n5-Show All Branches\n6-Create a File\n7-Import File\n8-Parse the XMI file\n9-Show Difference & Save a copy in HUB(DELTA)\n10-Reverse Engineering\n11-Merge Two Versions\n\nEnter U choice:";
	
	if(choice==1)
	{
		
	  //repository
	  mas=0;
	  admin_removed=2;
	  create_rep();
	  string cre111=main_of+"\\Backup\\Branches.txt";
		fstream f111;
		f111.open(cre111.c_str(),ios::out);
		f111.close();
	  
	}
	else
	if(choice==2)
	{
	
	}
	else
	if(choice==3)
	{
		exit(1);
	}
	else
	{
		cout<<"\t\tWrong selection\n";
	}
	
	cout<<"\n\n\t\t--------------------------------------------------------\n\n";
		goto top;
	
}

string currentDateTime() 
{
    time_t     now = time(0);
    struct tm  tstruct;
    char       buf[80];
    tstruct = *localtime(&now);
    // Visit http://en.cppreference.com/w/cpp/chrono/c/strftime
    // for more information about date/time format
    strftime(buf, sizeof(buf), "%Y-%m-%d.%X", &tstruct);

    return buf;
}


int create_rep()
{
	
		string string_for_rep;
	cout<<"\n\n\t\tEnter the Location of folder where you want to create repository\n\n\t\tExample\tC:\\Users\\PC name\\Desktop\\repo\n\n\t\t\tEnter Location: ";
		cin.ignore();
		getline(cin,main_of);
	    /*cout<<"\t\t\tRepository";
	    cout<<"\nEnter the Folder Name\n\n\tExample\thow to create files\n\n";
	    cout<<"\nEnter Folder Name:";
	    cin.ignore();
		getline(cin,string_for_fol); //"C:\\Users\\Sulman Yousad\\Desktop\\how to create files"*/
	
	    //cout<<"\n\n\n"<<string_for_fol<<"\n\n\n\n";
	    string_for_rep=main_of+"\\Backup";
	    if(mkdir(string_for_rep.c_str())!=0)
	      {
		     perror("\t\tError in Creating Repository");
		
	      }
	    else
	      {
		     
		     puts("\n\n\t\tRepository successfully created");
		     if(mas==0)
		     {
		     	create_bra();
		     	
			 }
		     
		     
	      }
	
	//main();
}
int create_bra()
{
	string string_for_bra1,string_for_bra333;
	if(mas==0)
	{
		string_for_bra="master";
		//string_for_bra333="master";
		
	}
	
	
	    
	change_bra=string_for_bra;
	    string_for_bra1=main_of+"\\"+string_for_bra;
	    if(mkdir(string_for_bra1.c_str())!=0)
	      {
		     perror("\t\tError in Creating Branch");
		
	      }
	    else
	      {
		     
		     puts("\n\t\tBranch successfully created");
		     
	      }
	      if(mas==1 || mas==2 && r==10)
	      {
	      	
		  }
		  else
		  {
		  	//create_file();
		  	mas=mas+1;
		  }
	  if(mas==1 )
	{
		
		create_text_file();
		mas=2;
		
	}
	
    
}
int create_file()
{
		string cre=main_of+"\\Backup\\Branches.txt";
		fstream f1;
		f1.open(cre.c_str(),ios::app);
		if(!f1)
		{
			cout<<"\n\t\tError in opening file";
		}
		
		if(string_for_bra=="master")
		{
			
			
		}
		else
		{
			if(lineofbackupfile==0)
			{
				f1<<string_for_bra;
				f1<<endl<<string_for_bra_pass;
				cout<<"\n\n\t\tUser created successfully";
			}
			else
			{
				f1<<endl<<string_for_bra;
				f1<<endl<<string_for_bra_pass;
				cout<<"\n\n\t\tUser created successfully";
			}
			
		}
		f1.close();
}
int create_text_file()
{
	fstream f6,f7;
	to_store=main_of+"\\Backup\\"+string_for_bra+".txt";
	f7.open(to_store.c_str(),ios::app);
	if(!f7)
	{
		cout<<"\t\tf5 not open";
	}
	f7.close();
	
}


int create_files_for_branches()
{
	fstream f4,f5;
	to_store=main_of+"\\"+change_bra;
	to_add=to_store+"\\"+to_get_name+".txt";
	string copy_da;
	f5.open(to_add.c_str(),ios::app);
	if(!f5)
	{
		cout<<"\t\tf5 not open";
	}
	
		fstream f15;
		to_store=main_of+"\\Backup"+"\\"+change_bra+".txt";
		f15.open(to_store.c_str(),ios::app);
			if(first_copy==1)
			{
				f15<<to_get_name;
				first_copy=2;
			}
			else
			{
				f15<<endl<<to_get_name;
			}
		f15.close();
	f5.close();
	main();
}
