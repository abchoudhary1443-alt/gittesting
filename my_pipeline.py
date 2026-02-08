#!/usr/bin/env python3
# first.py - My First Python Script! 🎉

def main():
    # Celebrating your first print!
    print("\n" + "="*50)
    print("🎉 CONGRATULATIONS! 🎉")
    print("="*50)
    print("\n🌟 This is your FIRST Python script executing in Jenkins! 🌟\n")
    
    # Fun ASCII art
    print("     _______")
    print("    /       \\")
    print("   /  O   O  \\")
    print("  /     ▽     \\  I'm so happy for you!")
    print(" /_____________\\")
    print("   |   |   |")
    print("   |   |   |")
    print("   |___|___|\n")
    
    # Personalized message
    print("✨ You did it! Your Jenkins job is now running Python! ✨\n")
    
    # Show current information
    import sys
    import datetime
    
    print("📊 Script Information:")
    print(f"   • Python Version: {sys.version.split()[0]}")
    print(f"   • Current Time: {datetime.datetime.now()}")
    print(f"   • Platform: {sys.platform}")
    
    # Countdown celebration
    print("\n🎊 Celebration Countdown:")
    for i in range(5, 0, -1):
        print(f"   {i}...")
    
    print("   🎊 BLASTOFF! 🚀\n")
    
    # Success message
    print("✅ JENKINS EXECUTION SUCCESSFUL!")
    print("✅ PYTHON SCRIPT RUNNING PERFECTLY!")
    
    # Add some emoji fun
    emojis = ["🎯", "⭐", "🏆", "🚀", "💪", "🔥", "👏", "🎊"]
    print("\n" + " ".join(emojis) + "\n")
    
    print("="*50)
    print("Keep coding! The journey has just begun! 💻")
    print("="*50)
    
    # Return success exit code (0 means success in Unix/Linux)
    return 0

if __name__ == "__main__":
    exit_code = main()
    exit(exit_code)
print("MY name is Abid Rasool i ma woring in cicd jenkins pipline")
