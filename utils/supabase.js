import { createClient } from '@supabase/supabase-js';
export const supabase = createClient(
  'https://fhkdzoydzfbbdjonrxyz.supabase.co',
  'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJvbGUiOiJhbm9uIiwiaWF0IjoxNjQyNTc5NTU0LCJleHAiOjE5NTgxNTU1NTR9.FS6rZAcAFxakmGrFgehK7Y-jKyoLFMR-8KWgvB47vCI'
);