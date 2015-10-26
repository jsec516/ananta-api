# These are directories that contain the application code under test.
DIRS_TO_TEST = %w(
  app/Accounts
  app/Appointments
  app/Core
)

# Tell guard which directories we want it to watch, otherwise guard will
# watch all directories in the project root and attempt to run undefined
# rake tasks.
directories ['tests'] + DIRS_TO_TEST.map { |dir| dir.sub(/\/.*/, '') }.uniq

DIRS_TO_TEST.each do |dir|
  test_task = File.basename(dir)
  
  # Define a guard clause for each directory you are testing.
  guard 'rake', task: "test:#{test_task}", run_on_start: false do
    watch(%r{^#{dir}/.*\.php})
    watch(%r{^tests/#{dir}/.*Test\.php})
    
    # Change these watches to match the support files and directories
    # for your application's test suite.
    watch(%r{tests/(fixtures|support)/.*\.php})
    watch(%r{tests/(bootstrap|yiiconf)\.php})
  end
end