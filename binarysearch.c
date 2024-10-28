#include<stdio.h>
void main()
{
int a[100],n,i,j,temp,left,right,middle,num;
printf("Enter the size of  the array\n");
scanf("%d",&n);
printf("Enter the array elements\n");
for(i=1;i<=n;i++)
{
scanf("%d",&a[i]);
}
                                           //array sorting
for(i=1;i<=n;i++)
{
for(j=i+1;j<=n;j++)
{
if(a[i]>a[j])
{
temp=a[i];
a[i]=a[j];
a[j]=temp;
}
}
}
printf("The sorted array elemets are\n");
for(i=1;i<=n;i++)
{

printf("%d \t\n",a[i]);
}
                                           //binary  search
left=1;
right=n;                                        
printf("Enter the element to be searched\n");
scanf("%d",&num);
while(left<=right)
{
middle=(left+right)/2;
if(a[middle]==num)
{
printf("%d found at  the position  %d\n",num,middle);
break;
}
else if(a[middle]>num)
right=middle-1;
else
left=middle+1;
}
if(left>right)
printf("%d not found in  the  list\n",num);
}

