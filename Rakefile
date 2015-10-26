# You can change this value to use the system installed
# phpunit, or if your vendor directory is in a different
# location.
PHPUNIT_BIN = './vendor/bin/phpunit'

# You should replace this value with the actual phpunit
# arguments you use for your application.
PHPUNIT_ARGS = ''

# These are directories that contain the application code
# under test.
DIRS_TO_TEST = %w(
  app/Accounts
  app/Appointments
  app/Core
)

# Specify the default task to invoke when you run
# the rake command without any arguments.
task :default => [:test]

desc "Run all tests"
task :test => ['test:all']

namespace :test do
  class TestFailure < StandardError; end

  task :default => [:all]
  task :all => DIRS_TO_TEST.map { |dir| File.basename(dir) }

  # Define a rake task for each directory you are testing.
  DIRS_TO_TEST.each do |dir|
    desc "Run tests in tests/#{dir}/"
    task File.basename(dir), :paths do |t, args|
      run_tests args.paths, Dir["tests/#{dir}/*Test.php"]
    end
  end

  private

  # Run tests matching all of the paths provided by guard.
  # If no paths were provided, run all tests covered by the current task.
  def run_tests(paths, default_paths=[])
    test_paths = (paths || []).map do |path|
      if path =~ /Test\.php$/
        path
      else
        File.join 'tests', path.sub(/\.php$/, 'Test.php')
      end
    end

    # Skip test files that don't exist
    test_paths.select! { |p| File.exists? p }

    files = test_paths.empty? ? default_paths : test_paths
    files.each { |file| run_test file }
    puts "All tests PASSED"
  end

  # Invoke PHPUnit for the given test file and print the results.
  # If the tests fail, raise an exception so that rake terminates
  # with a non-zero exit code.
  def run_test(test_file)
    base_command = "#{PHPUNIT_BIN} #{PHPUNIT_ARGS}"
    puts `#{base_command} #{test_file}`

    status = $?.exitstatus
    if status != 0
      raise "Tests FAILED with non-zero status #{status}"
    end
  end
end