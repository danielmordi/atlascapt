<?php

namespace App\Http\Controllers;

use App\Models\Coin;
use App\Models\User;
use App\Models\Deposit;
use App\Models\Package;
use App\Models\Withdrawal;
use Illuminate\Http\Request;
use App\Models\Settings\Site;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
  public function index()
  {
    $site = Site::find(1);
    $packages = Package::get();
    $faqs = collect([
      (object)[
        'id' => 1,
        'question' => 'What is this website about? Is ' . config('app.name') . ' coin ICO?',
        'answer' => 'No. This is not an Initial Coin Offering. We believe that Stake Farm\'s should be approached with caution as the majority of "Alt coins" do not offer any benefits to more established crypto currencies such as Bitcoin, Ethereum, etc. <br />Stake farm is a Registered Firm that manages Cryptocurrency Investments/Staking,with its user friendly Interface,Daily/weekly Staking reward and 24/7 Customer Support.'
      ],
      (object)[
        'id' => 2,
        'question' => 'What cryptocurrencies can I use to purchase?',
        'answer' => config('app.name') . ' can be purchased using Etherum,Usdt,Bitcoin,BNB and Xrp.'
      ],
      (object)[
        'id' => 3,
        'question' => 'I forgot my password. What should I do?',
        'answer' => 'Go to Password Reminder section, enter your registration e-mail address and follow the instructions.'
      ],
      (object)[
        'id' => 4,
        'question' => 'What is the process of investing?',
        'answer' => 'To make investments/Staking,Kindly create an account and navigate through your Dashboard to the Plan buttons,choose a plan that suits your budget and follow the process.'
      ],
      (object)[
        'id' => 5,
        'question' => 'What Markets do you trade?',
        'answer' => 'Tradeable Coins: Bitcoin, Litecoin, Ethereum, Bitcoin Cash and XRP.'
      ],
      (object)[
        'id' => 6,
        'question' => 'What is the risk for my investment?',
        'answer' => 'There is no risk whatsoever. Just invest and enjoy the financial freedom.'
      ],
      (object)[
        'id' => 7,
        'question' => 'How can I access the account?',
        'answer' => 'If you are a registered user of ' . config('app.name') . ', please enter your username and password in the appropriate fields at the top of the website and click the "Login to Account" button. You will be redirected to your account automatically as soon as you have done the above.'
      ],
    ]);
    return view('home.index', compact('site', 'packages', 'faqs'));
  }

  public function activated()
  {
    return view('user.activated');
  }

  public function verifyAccount(Request $request)
  {
    $user = User::find($request->uid);
    $user->is_activated = 'true';
    $user->save();

    $request->session()->flash('message', 'Account verification completed.');

    return redirect()->back();
  }

  public function about()
  {
    return view('home.about');
  }

  public function contact()
  {
    return view('home.contact');
  }

  public function testimonials()
  {
    $testimonials = [
      [
        "content" => "Finally, a platform that actually delivers on its promises. I’ve tried many others, but Stakefarm is on a different level. Zero hidden charges.",
        "author" => "Marcus Thorne",
        "location" => "London, UK",
        "rating" => 5
      ],
      [
        "content" => "The security features give me peace of mind. Only reason it's not a 5 is that the mobile app took a second to sync my wallet, but it works great now.",
        "author" => "Sarah Jenkins",
        "location" => "",
        "rating" => 4
      ],
      [
        "content" => "I was skeptical at first, but after my first successful withdrawal without any fees, I’m a believer. Stakefarm is the real deal.",
        "author" => "David Boeye",
        "location" => "",
        "rating" => 5
      ],
      [
        "content" => "Best decision I’ve made for my portfolio this year. The interface is so clean, even my grandmother could use it. Truly user-friendly.",
        "author" => "Elena Rodriguez",
        "location" => "Madrid, Spain",
        "rating" => 5
      ],
      [
        "content" => "Good service overall. The staking rewards are consistent, though the verification process took a little longer than I expected.",
        "author" => "Samuel O’Neil",
        "location" => "",
        "rating" => 3
      ],
      [
        "content" => "I’ve been an investor for 3 years, and I’ve never seen a dashboard this transparent. You can see your earnings grow in real-time.",
        "author" => "Gary V.",
        "location" => "Toronto, CA",
        "rating" => 5
      ],
      [
        "content" => "No deposit fees and no withdrawal fees? It sounds too good to be true, but it’s 100% real. Moving my whole portfolio here.",
        "author" => "Linda Wu",
        "location" => "",
        "rating" => 4
      ],
      [
        "content" => "Solid experience so far. It’s a bit of a learning curve for beginners, but the customer support is very patient and helpful.",
        "author" => "Roberto Silva",
        "location" => "",
        "rating" => 3
      ],
      [
        "content" => "The verification was lightning fast. I was up and running within an hour. I love the efficiency of this company.",
        "author" => "Kevin Stills",
        "location" => "Atlanta, Georgia",
        "rating" => 5
      ],
      [
        "content" => "Every time I have a question, the live chat responds instantly. Great service and even better returns.",
        "author" => "Fatima Al-Sayed",
        "location" => "",
        "rating" => 5
      ],
      [
        "content" => "I’ve already referred three of my colleagues. We are all seeing great results, though I wish there were more coin options available.",
        "author" => "Jonathan Blair",
        "location" => "",
        "rating" => 4
      ],
      [
        "content" => "Simple, sleek, and profitable. It’s rare to find a platform that doesn't try to bite into your profits with maintenance fees.",
        "author" => "Alice Thompson",
        "location" => "",
        "rating" => 5
      ],
      [
        "content" => "My only regret is not starting with a larger deposit. The daily income has been consistent since day one.",
        "author" => "Victor Hugo",
        "location" => "Paris, France",
        "rating" => 5
      ],
      [
        "content" => "It's okay. The profits are exactly as advertised, but the website layout takes a minute to get used to on a tablet.",
        "author" => "Michael Chen",
        "location" => "",
        "rating" => 3
      ],
      [
        "content" => "The mobile experience is fantastic. I can check my earnings while I’m on the train to work. Extremely convenient!",
        "author" => "Sonia G.",
        "location" => "Melbourne, Australia",
        "rating" => 5
      ],
      [
        "content" => "I’ve been with Stakefarm for over a year now. They have never missed a payout. Consistency is why I stay here.",
        "author" => "Brian Miller",
        "location" => "Houston, Texas",
        "rating" => 4
      ],
      [
        "content" => "Finally a company that respects the investor. No games, no delays, just pure professional service.",
        "author" => "Anita Desai",
        "location" => "",
        "rating" => 5
      ],
      [
        "content" => "I love how everything is automated. You just stake your coins and watch the magic happen. Truly passive income.",
        "author" => "Oscar Mendeleev",
        "location" => "",
        "rating" => 4
      ],
      [
        "content" => "The sign-up process was a breeze. I had my XRP working for me in less than 10 minutes. Brilliant platform!",
        "author" => "Claire Bennet",
        "location" => "",
        "rating" => 5
      ],
      [
        "content" => "Stakefarm is a game changer. I've told all my friends in the crypto community about it. This is the future.",
        "author" => "Tim Li",
        "location" => "New York",
        "rating" => 5
      ]
    ];
    return view('home.testimonials', compact('testimonials'));
  }

  public function admin()
  {
    $deposits = Deposit::where('status', 'completed')->get()->count();
    $withdrawals = Withdrawal::where('status', 'completed')->get()->count();
    $blocked = User::where('is_blocked', '1')->get()->count();
    $TotalInvestment = User::where('role_id', 2)->sum('wallet_balance');
    $users = User::where('role_id', 2)->get();
    return view('admin.dashboard', compact('users', 'deposits', 'withdrawals', 'TotalInvestment', 'blocked'));
  }

  public function user()
  {
    $package = Package::where('id', Auth::user()->package)->first();
    $coins = Coin::get();
    
    // Fetch all user IPOs for stats
    $allUserIpos = Auth::user()->userIpos()->with('ipo')->get();
    
    $totalIpoInvestment = $allUserIpos->sum('total_amount');
    $totalSharesBought = $allUserIpos->sum('quantity');
    $uniqueHoldingsCount = $allUserIpos->pluck('ipo_id')->unique()->count();
    $avgSharePrice = $totalSharesBought > 0 ? $totalIpoInvestment / $totalSharesBought : 0;
    
    // Take latest 5 for the dashboard list
    $purchasedIpos = $allUserIpos->sortByDesc('created_at')->take(5);

    return view('user.dashboard')->with([
      'package' => $package,
      'coins' => $coins,
      'purchasedIpos' => $purchasedIpos,
      'totalIpoInvestment' => $totalIpoInvestment,
      'totalSharesBought' => $totalSharesBought,
      'uniqueHoldingsCount' => $uniqueHoldingsCount,
      'avgSharePrice' => $avgSharePrice
    ]);
  }

  public function notifications()
  {
    $notifications = Auth::user()->notifications()->paginate(10);
    return view('user.notifications', compact('notifications'));
  }

  public function readNotification($id)
  {
    $notification = Auth::user()->notifications()->findOrFail($id);
    $notification->markAsRead();

    return redirect()->back()->with('success', 'Notification marked as read.');
  }

  public function readAllNotifications()
  {
    Auth::user()->unreadNotifications->markAsRead();

    return redirect()->back()->with('success', 'All notifications marked as read.');
  }

  public function deleteNotification($id)
  {
    $notification = Auth::user()->notifications()->findOrFail($id);
    $notification->delete();

    return redirect()->back()->with('success', 'Notification deleted successfully.');
  }

  public function profile()
  {
    $user = Auth::user();
    return view('user.profile', compact('user'));
  }

  public function updateProfile(Request $request)
  {
    $user = Auth::user();
    $request->validate([
        'username' => 'required|string|max:255|unique:users,username,' . $user->id,
        'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
    ]);

    $user->username = $request->username;
    $user->email = $request->email;
    $user->save();

    return redirect()->back()->with('success', 'Your profile was updated successfully!');
  }

  public function updatePassword(Request $request)
  {
    $request->validate([
        'current_password' => 'required|string',
        'password' => 'required|string|min:8|confirmed',
    ]);

    $user = Auth::user();

    if (!Hash::check($request->current_password, $user->password)) {
        return redirect()->back()->withErrors(['current_password' => 'The provided password does not match your current password.']);
    }

    $user->password = Hash::make($request->password);
    $user->save();

    return redirect()->back()->with('password_success', 'Your password was updated successfully!');
  }
}
