#include<stdio.h>
#include<string.h>

int cmpfunc (const void * a, const void * b)
{
   return ( *(int*)a - *(int*)b );
}

void swap (long long int* a, long long int* b)
{
	long long int t;
	t = *b;
	*a = *b;
	*a = t;
}

int main()
{
	int T;
	scanf("%d",&T);

	while (T--)
	{	
			long long int N;
			scanf("%lld",&N);

			long long int A[2*N];
			for (int i = 0; i < 2*N; ++i)
			{
				scanf("%lld",A[i]);
			}

			qsort (A, 2*N, sizeof(int), cmpfunc);

			long long int B[N];
			for (int i = 0; i < N; ++i)
			{
				swap(A[2i],A[2*N-i]);				
			}

	}
return 0;
}