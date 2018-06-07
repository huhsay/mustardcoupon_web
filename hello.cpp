#include <iostream>
#include <string>
#include <algorithm>
#include <queue>
#include <memory.h>
#include <map>
#include <list>
#include <cmath>
#include <functional>
#include <vector>

using namespace std;

#define intmax 2147483647
#define FOR(i, a, b) for(int i = a; i < b; ++i)
#define REP(i, n) FOR(i, 0, n)
#define SIZE 100000

#define LEFT false
#define RIGHT true

int N, L, k;
int ans;

struct info
{
   int place;
   int id;
   bool dir; // left == false, right == true;
};

info ants[SIZE];
vector<int> sequence;

void TakeInput()
{
   ans = 0;
   memset(ants, 0, sizeof(info) * N);
   sequence.clear();
   cin >> N >> L >> k;

   REP(i, N)
   {
      int place, id;
      cin >> place >> id;
      ants[i] = { id > 0 ? L - place : place, id, id > 0 ? RIGHT : LEFT };

      sequence.push_back(id);
   }
}

inline bool cmp(const info& left, const info& right)
{
   if (left.place < right.place)
      return true;
   else if (left.place > right.place)
      return false;
   else
   {
      if (left.id < right.id)
         return true;
      else
         return false;
   }
}

void Solve()
{
   sort(ants, ants + N, cmp);

   int left_cursor = 0;
   int right_cursor = sequence.size() - 1;

   REP(i, N)
   {
      if (ants[i].dir == LEFT)
      {
         ants[i].id = sequence[left_cursor];
         ++left_cursor;
      }
      else
      {
         ants[i].id = sequence[right_cursor];
         --right_cursor;
      }
   }

   sort(ants, ants + N, cmp);
   ans = ants[k - 1].id;
}

void Print()
{
   cout << ans << '\n';
}

int main()
{
   ios::sync_with_stdio(false);
   cin.tie(0);

   int T;
   cin >> T;

   REP(i, T)
   {
      TakeInput();
      Solve();
      Print();
   }

   return 0;
}
